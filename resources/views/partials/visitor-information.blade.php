<div class="overflow-y-auto">
    <table class="min-w-full mt-3 md:table-auto border-separate border-spacing-3 border border-slate-400 p-5">
      <thead>
        <tr>
          <th class="border p-3">Device name</th>
          <th class="border p-3">Platform</th>
          <th class="border p-3">Browser </th>
          <th class="border p-3">User agent </th>
        </tr>
      </thead>
   
          <tbody>
          <tr>
              <td class="border p-3">{{ visitor()->device() }}</td>
              <td class="border p-3">{{ visitor()->platform() }}</td>
              <td class="border p-3">{{ visitor()->browser() }}</td>
              <td class="border p-3">{{ visitor()->useragent() }}</td>   
          </tr>
          </tbody>
     
    </table>
</div>